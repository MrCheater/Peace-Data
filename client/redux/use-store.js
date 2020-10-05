import { useMemo } from "react";
import { createStore, applyMiddleware } from "redux";
import { composeWithDevTools } from "redux-devtools-extension";
import createSagaMiddleware from "redux-saga";

import createApi from "./create-api";
import rootReducer from "./root-reducer";
import rootSaga from "./root-saga";

let store;

function initStore(preloadedState) {
  const api = createApi({ baseURL: "http://localhost:3001/" });
  const sagaMiddleware = createSagaMiddleware();

  const newStore = createStore(
    rootReducer,
    preloadedState,
    composeWithDevTools(applyMiddleware(sagaMiddleware))
  );

  if (typeof window !== "undefined") {
    newStore.sagaTask = sagaMiddleware.run(rootSaga, { api });
  }

  return newStore;
}

const initializeStore = (preloadedState) => {
  let _store = store ?? initStore(preloadedState);

  if (preloadedState && store) {
    _store = initStore({
      ...store.getState(),
      ...preloadedState
    });
    store = undefined;
  }

  if (typeof window === "undefined") return _store;
  if (!store) store = _store;

  return _store;
};

export default function useStore(initialState) {
  const store = useMemo(() => initializeStore(initialState), [initialState]);
  return store;
}

import { all, call, delay, put, takeEvery } from "redux-saga/effects";
import { tick } from "./actions";
import * as ActionTypes from "./action-types";

function* runClockSaga() {
  while (true) {
    yield put(tick());
    yield delay(1000);
  }
}

function* pingSaga({ api }) {
  try {
    const result = yield api.ping();
    console.log(result);
  } catch (error) {}
}

function* rootSaga({ api }) {
  yield all([
    call(runClockSaga, { api }),
    takeEvery(ActionTypes.TICK, pingSaga, { api })
  ]);
}

export default rootSaga;

import * as ActionTypes from "./action-types";

const initialState = {
  time: 0,
  count: 0
};

const rootReducer = (state = initialState, action) => {
  switch (action.type) {
    case ActionTypes.TICK:
      return {
        ...state,
        time: action.payload.time
      };
    case ActionTypes.INCREMENT:
      return {
        ...state,
        count: state.count + 1
      };
    case ActionTypes.DECREMENT:
      return {
        ...state,
        count: state.count - 1
      };
    case ActionTypes.RESET:
      return {
        ...state,
        count: initialState.count
      };
    default:
      return state;
  }
};

export default rootReducer;

import * as ActionTypes from "./action-types";

export const tick = () => ({
  type: ActionTypes.TICK,
  payload: {
    time: Date.now()
  }
});

export const increment = () => ({
  type: ActionTypes.INCREMENT,
  payload: {}
});

export const decrement = () => ({
  type: ActionTypes.DECREMENT,
  payload: {}
});

export const reset = () => ({
  type: ActionTypes.RESET,
  payload: {}
});

import { bindActionCreators } from "redux";
import { useSelector, useDispatch } from "react-redux";

import { increment, decrement, reset } from "../redux/actions";

const useCounter = () => {
  const count = useSelector((state) => state.count);
  const dispatch = useDispatch();

  return {
    count,
    ...bindActionCreators({ increment, decrement, reset }, dispatch)
  };
};

const Counter = () => {
  const { count, increment, decrement, reset } = useCounter();
  return (
    <div>
      <h1>
        Count: <span>{count}</span>
      </h1>
      <button onClick={increment}>+1</button>
      <button onClick={decrement}>-1</button>
      <button onClick={reset}>Reset</button>
    </div>
  );
};

export default Counter;

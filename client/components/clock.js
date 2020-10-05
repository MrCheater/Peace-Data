import { useSelector, shallowEqual } from "react-redux";

import styles from "./clock.module.scss";

const useClock = () => {
  return useSelector(
    (state) => ({
      time: state.time
    }),
    shallowEqual
  );
};

const formatTime = (time) => {
  // cut off except hh:mm:ss
  return new Date(time).toJSON().slice(11, 19);
};

const Clock = () => {
  const { time } = useClock();
  return <div className={styles.root}>{formatTime(time)}</div>;
};

export default Clock;

import Axios from "axios";

const createApi = ({ baseURL }) => {
  const axios = Axios.create({ baseURL });
  return {
    async ping() {
      return await axios.get("/api/ping");
    }
  };
};

export default createApi;

import cors from "cors";
import express from "express";

const port = 3001;
const app = express();

app.use(cors());

app.get("/api/ping", function (req, res) {
  res.send("Pong");
});

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`);
});

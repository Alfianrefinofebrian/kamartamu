import React from "react";
import ReactDOM from "react-dom/client";
import Navbar from "./Navbar";
import '../css/app.css'; 

ReactDOM.createRoot(document.getElementById("navbar")).render(
  <React.StrictMode>
    <Navbar />
  </React.StrictMode>
);

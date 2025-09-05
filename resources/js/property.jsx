import React from "react";
import ReactDOM from "react-dom/client";
import PropertyDetail from "./components/villas/propertydetail";
import { BrowserRouter } from "react-router-dom";


const mountEl = document.getElementById("property-detail");
if (mountEl) {
  const id = mountEl.dataset.propertyId;
  ReactDOM.createRoot(mountEl).render(
    <React.StrictMode>
      <BrowserRouter>
        <PropertyDetail initialId={id} />
      </BrowserRouter>
    </React.StrictMode>
  );
}

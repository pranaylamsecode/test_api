import React from "react";

import Main from "./Main";
import ReactDOM from "react-dom";
if (document.getElementById("example")) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Main />
        </React.StrictMode>
    );
}

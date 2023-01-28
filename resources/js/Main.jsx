import React from "react";
import { HashRouter, Route, Router, Routes } from "react-router-dom";
import App from "./src/App";
import Products from "./src/components/products/products";

const Main = () => {
    return (
        <>
            <HashRouter>
                <Routes>
                    <Route path="/" element={<App />} />
                    <Route path="products" element={<Products />} />
                </Routes>
            </HashRouter>
        </>
    );
};

export default Main;

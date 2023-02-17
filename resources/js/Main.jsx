import React from "react";
import { HashRouter, Route, Router, Routes } from "react-router-dom";
import App from "./src/App";
import Products from "./src/components/products/products";
import Layout from "./src/pages/Layout";
import Home from "./src/pages/Home";
import Blogs from "./src/pages/Blogs";
import Contact from "./src/pages/Contact";
import NoPage from "./src/pages/NoPage";

const Main = () => {
    return (
        <>
            <HashRouter>
                <Routes>
                    <Route path="/" element={<Layout />}>
                        <Route index element={<Home />} />
                        <Route path="blogs" element={<Blogs />} />
                        <Route path="contact" element={<Contact />} />
                        <Route path="*" element={<NoPage />} />
                    </Route>
                </Routes>
            </HashRouter>
        </>
    );
};

export default Main;

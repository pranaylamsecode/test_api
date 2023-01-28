import React from "react";
import Footer from "./pages/Footer";
import Header from "./pages/Header";
import Hero from "./pages/Hero";
import Sidebar from "./pages/Sidebar";

const App = () => {
    return (
        <div className="container">
            <Header />
            <Hero />
            <Sidebar />
            <Footer />
        </div>
    );
};

export default App;

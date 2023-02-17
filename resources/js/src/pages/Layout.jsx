import { Outlet, Link } from "react-router-dom";
import Footer from "./Footer";
import Header from "./Header";
import Sidebar from "./Sidebar";
import CssBaseline from "@material-ui/core/CssBaseline";

const Layout = () => {
    return (
        <>
            <Header />
            <CssBaseline />;
            <Outlet />
            <Sidebar />
            
        </>
    );
};

export default Layout;

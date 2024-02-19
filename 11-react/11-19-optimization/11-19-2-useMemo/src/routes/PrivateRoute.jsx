import React, { useContext } from "react";
import { Navigate, Outlet } from "react-router-dom";
import { AuthContext } from "../store/AuthProvider";

const PrivateRoute = () => {
	const auth = useContext(AuthContext);
	if (!auth.token) return <Navigate to="/login" />;
	return <Outlet />;
};

export default PrivateRoute;

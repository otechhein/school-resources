import { createContext, useState } from "react";

const AuthContext = createContext();

const AuthProvider = ({ children }) => {
	const [user, setUser] = useState(null);
	const [token, setToken] = useState(localStorage.getItem("site") || "");

	const loginAction = async (data) => {
		try {
			if (
				data.email === "admin@gmail.com" &&
				data.password === "password"
			) {
				setUser(data);
				setToken("token");
				localStorage.setItem("site", "token");
				return;
			}

			throw new Error("Invalid Login Credentials");
		} catch (err) {
			throw new Error("Invalid Login Credentials");
		}
	};

	const logOut = () => {
		setUser(null);
		setToken("");
		localStorage.removeItem("site");
	};

	return (
		<AuthContext.Provider value={{ token, user, loginAction, logOut }}>
			{children}
		</AuthContext.Provider>
	);
};

export { AuthContext };

export default AuthProvider;

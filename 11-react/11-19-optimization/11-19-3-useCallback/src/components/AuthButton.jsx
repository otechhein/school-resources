import { memo } from "react";
import { Link } from "react-router-dom";

const AuthButton = memo(({ auth, handleLogout }) => {
	console.log("....render auth button");
	return (
		<>
			{auth.token ? (
				<button type="button" onClick={handleLogout}>
					Logout
				</button>
			) : (
				<Link to="/login"> Login</Link>
			)}
		</>
	);
});

export default AuthButton;

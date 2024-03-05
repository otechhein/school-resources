import { memo } from "react";
import { Link } from "react-router-dom";

const AuthButton = memo(({ auth }) => {
	console.log("....render auth button");
	return (
		<>
			{auth.token ? (
				<button type="button">Logout</button>
			) : (
				<Link to="/login"> Login</Link>
			)}
		</>
	);
});

export default AuthButton;

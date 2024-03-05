import { useContext, useState } from "react";
import { AuthContext } from "../store/AuthProvider";
import { Form, useNavigate } from "react-router-dom";

const Login = () => {
	const [input, setInput] = useState({
		email: "",
		password: "",
	});

	const navigate = useNavigate();

	const auth = useContext(AuthContext);
	const handleLogin = async (e) => {
		e.preventDefault();
		try {
			if (input.email !== "" && input.password !== "") {
				await auth.loginAction(input);
				return navigate("/");
			}
		} catch (error) {
			alert("please provide a valid input");
		}
	};

	const handleInput = (e) => {
		const { name, value } = e.target;
		setInput((prev) => ({
			...prev,
			[name]: value,
		}));
	};

	return (
		<Form onSubmit={handleLogin}>
			<div className="form_control">
				<label htmlFor="user-email">Email:</label>
				<input
					type="email"
					id="user-email"
					name="email"
					placeholder="example@yahoo.com"
					aria-describedby="user-email"
					aria-invalid="false"
					onChange={handleInput}
				/>
				<div id="user-email" className="sr-only">
					Please enter a valid username. It must contain at least 6
					characters.
				</div>
			</div>
			<div className="form_control">
				<label htmlFor="password">Password:</label>
				<input
					type="password"
					id="password"
					name="password"
					aria-describedby="user-password"
					aria-invalid="false"
					onChange={handleInput}
				/>
				<div id="user-password" className="sr-only">
					your password should be more than 6 character
				</div>
			</div>
			<button className="btn-submit">Submit</button>
		</Form>
	);
};

export default Login;

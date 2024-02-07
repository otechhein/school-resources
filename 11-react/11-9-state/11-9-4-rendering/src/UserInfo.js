const UserInfo = ({ editMode, editedName, handleNameChange, userDetails }) => {
	console.log(".....render UserInfo.......");

	return (
		<div>
			<p>
				Name:{" "}
				{editMode ? (
					<input
						type="text"
						value={editedName}
						onChange={handleNameChange}
					/>
				) : (
					userDetails.name
				)}
			</p>
			<p>Email: {userDetails.email}</p>
		</div>
	);
};

export default UserInfo;

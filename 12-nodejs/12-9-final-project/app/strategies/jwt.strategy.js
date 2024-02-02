const config = require("../config/config");
const { userRepo } = require("../models");

const JwtStrategy = require("passport-jwt").Strategy;
const ExtractJwt = require("passport-jwt").ExtractJwt;

const opts = {
	jwtFromRequest: ExtractJwt.fromAuthHeaderAsBearerToken(),
	secretOrKey: config.jwt.secret,
};

module.exports = (passport) => {
	passport.use(
		new JwtStrategy(opts, async (payload, done) => {
			const { email } = payload;
			const user = await userRepo.findOne({ where: { email } });

			if (user && user.email === email) {
				return done(null, user);
			}

			return done(null, false);
		})
	);
};

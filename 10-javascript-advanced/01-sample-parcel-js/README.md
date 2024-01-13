20 July 2021: Respository is now obsolete and archived.

---

# Parcel.js Sample Project

For the Parcel project at [https://parceljs.org/](https://parceljs.org/).

I just discovered this today (11 Feb 2020) and had this sample project up and running in 5 minutes (including typos).

Seriously worth considering from front-end development as an alternative to the bloat of webpack.


## Setup Instructions

It's super simple:

<ol>
    <li>Run `npm init -y` to setup Node Package Manager and create the packages.json file.</li>
    <li>Run `npm install parcel --save-dev` to install parcel locally. 
        This is a better option than global because you're kind of self-documenting the dependency in packages.json for other project developers.
    </li>
    <li>Create your site code code that need to compile.</li>
    <li>Run `parcel server src/index.html` from the terminal.
        Nope, that doesn't work when installed locally. So go to the next step
    </li>
    <li>So add the "dev" and "test" scripts you'll see in the package.json file. 
        Then you just need to run `npm run dev` in development to build the site and setup the local server.
        Everything gets bundled into a new "dist" folder.
    </li>
</ol>


## Notes

If you read the documentation you'll see both "parcel" and "parcel-bundler" packages references.
Wondering what the difference is? Me too. I searched "npm install parcel-bundler vs parcel" 
and come across <a href="https://github.com/parcel-bundler/parcel/issues/2360">https://github.com/parcel-bundler/parcel/issues/2360</a>

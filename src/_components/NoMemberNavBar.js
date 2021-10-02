import React from "react";
import {
  BrowserRouter as Router,
  Route,
  Link,
  useHistory,
} from "react-router-dom";
import "./NoMemberNavBar.css";
import Logo from "../_assets/edlogo.svg";
import BTN from "./BTN";

function NoMemberNavBar(props) {
  return (
    <div className="navBarCont">
      <nav>
        <div className="wrapper">
          <img className="site-brand" src={Logo} alt="" />
          <ul className="navBar-ul-1">
            <li>
              <Link to="/">HOME</Link>
            </li>
            <li>
              <Link to="/browse">BROWSE</Link>
            </li>
            <li>
              <Link to="/catalog">CATALOG</Link>
            </li>
            <li>
              <Link to="/enterprise">ENTERPRISE</Link>
            </li>
            <li>
              <Link to="/individuals">INDIVIDUALS</Link>
            </li>
            <li>
              <Link to="/resources">RESOURCES</Link>
            </li>
          </ul>
        </div>
        {/* <SearchBar /> */}
        <ul className="navBar-ul-2">
          <li>
            <BTN
              onClick={props.loginHandler}
              btnContainer="btnCont"
              btnClass="btn"
              btnText="Login"
            />
          </li>
          <li>
            <Link to="/sign-up">
              <BTN
                btnContainer="btnCont"
                btnClass="btn"
                btnText="Try Free"
              ></BTN>
            </Link>
          </li>
        </ul>
      </nav>
    </div>
  );
}

export default NoMemberNavBar;

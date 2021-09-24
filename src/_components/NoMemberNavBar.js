import React from "react";
import "./NoMemberNavBar.css";
import Logo from "../_assets/edlogo.svg";
import BTN from "./BTN";

function NoMemberNavBar() {
  return (
    <div className="navBarCont">
      <nav>
        <div className="wrapper">
          <img className="site-brand" src={Logo} alt="" />
          <ul className="navBar-ul-1">
            <li>HOME</li>
            <li>BROWSE</li>
            <li>CATALOGUE</li>
            <li>ENTERPRISE</li>
            <li>INDIVIDUALS</li>
            <li>RESOURCES</li>
          </ul>
        </div>
        {/* <SearchBar /> */}
        <ul className="navBar-ul-2">
          <li>
            <BTN btnContainer="btnCont" btnClass="btn" btnText="Login" />
          </li>
          <li>
            <BTN btnContainer="btnCont" btnClass="btn" btnText="Try Free" />
          </li>
        </ul>
      </nav>
    </div>
  );
}

export default NoMemberNavBar;

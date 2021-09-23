import React from "react";
import "./MemberNavBar.css";
import { IoMdNotifications } from "react-icons/io";
import { CgMenuGridR, CgNotes } from "react-icons/cg";
import SearchBar from "./SearchBar";
import Logo from '../_assets/ed-logo.svg';
import Avatar from '../_assets/stock-avatar.png';

function MemberNavBar(props) {
  return (
    <div className='navBarCont' style={{display: "none"}}>
      <nav>
          <img className="site-brand" src={Logo} alt="" />
        <ul className="navBar-ul-1">
          <li>home</li>
          <li>browse</li>
          <li>courses</li>
          <li>paths</li>
          <li>resources</li>
          <li>Practice</li>
        </ul>
        <SearchBar />
        <ul className="navBar-ul-2">
          <li>
            <CgNotes className="icon"/>
          </li>
          <li>
            <IoMdNotifications className="icon" />
          </li>
          <li>
            <CgMenuGridR className="icon" />
          </li>
          <li className="profile-icon"><img src={ Avatar } alt=""/></li>
        </ul>
      </nav>
    </div>
  );
}

export default MemberNavBar;

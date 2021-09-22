import React from "react";
import "./NavBar.css";
import { IoMdNotifications } from "react-icons/io";
import { CgMenuGridR, CgNotes } from "react-icons/cg";
import SearchBar from "./SearchBar";

function NavBar() {
  return (
    <div className="navBarCont">
      <nav>
          <logo/>
        <ul>
          <li>home</li>
          <li>browse</li>
          <li>courses</li>
          <li>paths</li>
          <li>resources</li>
          <li>Practice</li>
        </ul>
        <SearchBar />
        <ul>
          <li>
            <CgNotes />
          </li>
          <li>
            <IoMdNotifications />
          </li>
          <li>
            <CgMenuGridR />
          </li>
          <li>profile</li>
        </ul>
      </nav>
    </div>
  );
}

export default NavBar;

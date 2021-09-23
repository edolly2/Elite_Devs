import React from 'react';
import './NoMemberNavBar.css';
import "./MemberNavBar.css";
import { IoMdNotifications } from "react-icons/io";
import { CgMenuGridR, CgNotes } from "react-icons/cg";
import SearchBar from "./SearchBar";
import Logo from '../_assets/ed-logo.svg';
import Avatar from '../_assets/stock-avatar.png';

function NoMemberNavBar() {
    return (
        <div className='navBarCont'>
        <nav>
            <img className="site-brand" src={Logo} alt="" />
          <ul className="navBar-ul-1">
            <li>home</li>
            <li>browse</li>
            <li>Catalogue</li>
            <li>Enterprise</li>
            <li>individuals
            </li>
            <li>resources</li>
          </ul>
          <SearchBar />
          <ul className="navBar-ul-2">
            <li>
              <button>Login</button>
            </li>
            <li>
              <button>Try Free</button>
            </li>
            
          </ul>
        </nav>
      </div>
    )
}

export default NoMemberNavBar;

import React from "react";
import "./SearchBar.css";
import { AiOutlineSearch } from "react-icons/ai";

function SearchBar() {
  return (
      <div className="searchBarCont">
        <input className="searchBarInput" type="text" placeholder="Search.." />
        <AiOutlineSearch className="search-icon" />
      </div>
  );
}

export default SearchBar;

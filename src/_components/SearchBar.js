import React from "react";
import "./SearchBar.css";
import { AiOutlineSearch } from 'react-icons/ai'

function SearchBar() {
  return (
    <div className="searchBarCont">
      <input type="text" placeholder="Search.." />
        <AiOutlineSearch/>
    </div>
  );
}

export default SearchBar;

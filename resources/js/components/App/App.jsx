import React from 'react';
import FirstScreen from '../FIrstScreen/FirstScreen';
import SecondScreen from '../SecondScreen/SecondScreen';
import './App.css';
import { Route, Routes } from 'react-router-dom';

const App = ()=> {
  return (
    <Routes>
      <Route path='/' element={<FirstScreen/>}/>
      <Route path='/search' element={<SecondScreen/>}/>
    </Routes>
  );
}

export default App;

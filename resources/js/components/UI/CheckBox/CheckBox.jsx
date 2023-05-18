import './CheckBox.css'
import React from 'react';
const CheckBox = ({id, children, checked, setChecked, ...props}) => {
  return <div className='checkbox'>
    <label className='checkbox__label' htmlFor={id}>
      <input type='checkbox' 
      className='hidden checkbox__input' 
      checked={checked} 
      onChange={setChecked} 
      id={id}
      {...props}
      />
      <span className='checkbox__box' />
      {children}
    </label>
  </div>
}

export default CheckBox;
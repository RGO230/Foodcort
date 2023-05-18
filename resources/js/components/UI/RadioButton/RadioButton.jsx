import './RadioButton.css'
import React from 'react';
const RadioButton = ({ id, children, checked, setChecked, ...props }) => {
  return <div className='radio'>
    <label className='radio__label' htmlFor={id}>
      <input type='radio'
        className='hidden radio__input'
        checked={checked}
        onChange={setChecked}
        id={id}
        {...props}
      />
      <span className='radio__box' />
      {children}
    </label>
  </div>
}

export default RadioButton;
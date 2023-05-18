import Portal from '../Portal/Portal';
import './CardPopup.css'
import img from '../../assets/img/placeholder.webp'
import React from 'react';
const CardPopup = ({ active, setActive }) => {
  return <Portal>
    <div className={`card-popup ${active ? 'active' : ''}`} onClick={() => setActive(false)} tabIndex={0}>
      <div className='card-popup__content' onClick={e => e.stopPropagation()}>
        <p style={{textAlign: 'center'}}>Данная фича еще в разработке...</p>
        {/* <div className='card-popup__left-block'>
          <div className='card-popup__image'>
            <img src={img} width='100%' height='100%'/>
          </div>
        </div>
        <div className='card-popup__right-block'>
          <p className='card-popup__title'>Шавушечная</p>
        </div> */}
      </div>
    </div>
  </Portal>
}

export default CardPopup;
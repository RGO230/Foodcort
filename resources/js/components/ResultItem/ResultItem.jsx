import geoIcon from '../../assets/img/geoIcon.png'
import './ResultItem.css'
import React from 'react';
const ResultItem = ({data,setPopupActive}) => {
  const {img, title, address, price_from} = data;
  return <div className='result-item'>
    <div className='result-item__image'>
      <img src={img} width='100%' height='100%' />
    </div>
    <div className='result-item__content'>
      <h2 className='result-item__title'>{title}</h2>
      <p className='result-item__sort'>Цена: от {price_from}р</p>
      <div className='result-item__geo'>
        <div className='result-item__icon'>
          <img src={geoIcon} alt="иконка геолокации" width='100%' height='100%' />
        </div>
        {address}
      </div>
      <button className='result-item__more' onClick={setPopupActive}>Подробнее</button>
    </div>
  </div>
}

export default ResultItem;
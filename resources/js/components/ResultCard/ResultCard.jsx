import './ResultCard.css'
import React from 'react';
const ResultCard = ({ title, address }) => {
  return <div className='result-card'>
    <div className='result-card__image'>

    </div>
    <div className='result-card__info'>
      <h2 className='result-card__title'>{title}</h2>
      <div className='result-card__raiting'></div>
      <div className='result-card__address'>
        {address}
      </div>
      <button type='button' className='result-card__more'>Подробнее</button>
    </div>
  </div>
}

export default ResultCard;
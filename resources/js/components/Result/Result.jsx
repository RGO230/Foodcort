import './Result.css'
import ResultItem from '../ResultItem/ResultItem'
import CardPopup from '../CardPopup/CardPopup';
import { useState } from 'react';
import ResultItemPlaceholder from '../ResultItemPlaceholder/ResultItemPlaceholder';
import React from 'react';
const Result = ({ items, loading, sortBy }) => {
  const [popupActive, setPopupActive] = useState(false);
  return <>
    <CardPopup active={popupActive} setActive={setPopupActive} />
    <div className='result'>
      <h1 className='result__title'>{loading ? 'Поиск...' : items?.length ? `Найдено точек, удовлетворяющих запросу: ${items.length}`
        : 'По вашему запросу ничего не найдено'}</h1>
      {loading ? <>
        <ResultItemPlaceholder />
        <ResultItemPlaceholder />
        <ResultItemPlaceholder />
      </>
        : items?.length ?
          items.map(item => <ResultItem key={item.id} data={item} setPopupActive={() => setPopupActive(true)} />)
          : null}
    </div>
  </>
}

export default Result;
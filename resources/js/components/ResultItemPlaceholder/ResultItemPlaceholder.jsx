import Placeholder from '../Placeholder/Placeholder';
import './ResultItemPlaceholder.css'
import React from 'react';
const ResultItemPlaceholder = () => {
  return <div className='result-placeholder'>
    <Placeholder className='result-placeholder__image' />
    <div className='result-placeholder__content'>
      <Placeholder className='result-placeholder__title' />
      <Placeholder className='result-placeholder__price' />
      <Placeholder className='result-placeholder__geo' />
      <Placeholder className='result-placeholder__submit' />
    </div>
  </div>
}

export default ResultItemPlaceholder;
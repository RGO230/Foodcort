import './Filters.css'
import background from '../../assets/img/background_filters.png'
import { useState } from 'react'
import CheckBox from '../UI/CheckBox/CheckBox';
import { createSearchParams, useNavigate } from 'react-router-dom';
import RadioButton from '../UI/RadioButton/RadioButton';
import React from 'react';
const Filters = () => {
  const navigate = useNavigate();
  const [formData, setFormData] = useState({
    delivery: false,
    eatPlace: false,
    priceFrom: 0,
    priceTo: 0,
    district: 'Коминтерновский',
    sortBy: '',
  })

  const districtChange = (e) => {
    setFormData({ ...formData, district: e.target.value })
  }

  const priceRound = (e) => {
    const name = e.target.name;
    const value = e.target.value;
    if (value > 400) {
      setFormData({ ...formData, [name]: 400 })
      return
    }
    if (value < 100) {
      setFormData({ ...formData, [name]: 100 })
      return
    }
    setFormData({ ...formData, [name]: Math.round(value / 10) * 10 })
  }

  const handleSubmit = (e) => {
    e.preventDefault();
    let params = {};
    for (const param in formData) {
      if (formData[param]) {
        params[param] = formData[param];
      }
    }
    navigate({
      pathname: '/search',
      search: `?${createSearchParams(params)}`,
    });
  }

  return <div className='filters'>
    <img src={background} alt="Фон" className='filters__background' width='100%' height='100%' />
    <div className='filters__content'>
      <form className='filters__form' onSubmit={e => handleSubmit(e)}>
        <div className='filters__block'>
          <h2 className='filters__title'>ЦЕНА</h2>
          <div className='filters__price-block'>
            <label className='filters__prace-label'>
              от
              <input type='text' defaultValue={100} className='filters__price-input' onBlur={priceRound} />
            </label>
            <label className='filters__prace-label'>
              до
              <input type='text' defaultValue={400} className='filters__price-input' onBlur={priceRound} />
            </label>
          </div>
        </div>
        <div className='filters__block'>
          <h2 className='filters__title'>РАЙОН</h2>
          <div className='filters__districts-block'>
            <RadioButton
              id='district1'
              name='district'
              value='Коминтерновский'
              checked={formData.district === 'Коминтерновский'}
              setChecked={districtChange}>
              Коминтерновский
            </RadioButton>
            <RadioButton
              id='district2'
              name='district'
              value='Железнодорожный'
              checked={formData.district === 'Железнодорожный'}
              setChecked={districtChange}>
              Железнодорожный
            </RadioButton>
            <RadioButton
              id='district3'
              name='district'
              value='Центральный'
              checked={formData.district === 'Центральный'}
              setChecked={districtChange}>
              Центральный
            </RadioButton>
            <RadioButton
              id='district4'
              name='district'
              value='Левобережный'
              checked={formData.district === 'Левобережный'}
              setChecked={districtChange}>
              Левобережный
            </RadioButton>
            <RadioButton
              id='district5'
              name='district'
              value='Ленинский'
              checked={formData.district === 'Ленинский'}
              setChecked={districtChange}>
              Ленинский
            </RadioButton>
            <RadioButton
              id='district6'
              name='district'
              value='Советский'
              checked={formData.district === 'Советский'}
              setChecked={districtChange}>
              Советский
            </RadioButton>
          </div>
        </div>
        <div className='filters__block'>
          <h2 className='filters__title'>ДОПОЛНИТЕЛЬНЫЕ ПАРАМЕТРЫ</h2>
          <div className='filters__other-params'>
            <CheckBox
              id='delivery'
              name='delivery'
              value='delivery'
              checked={formData.delivery}
              setChecked={e => setFormData({ ...formData, delivery: e.target.checked })}>
              Наличие доставки
            </CheckBox>
            <CheckBox
              id='eatPlace'
              name='eatPlace'
              value='eatPlace'
              checked={formData.eatPlace}
              setChecked={e => setFormData({ ...formData, eatPlace: e.target.checked })}>
              Наличие места для приема пищи
            </CheckBox>
          </div>
        </div>
        <button className='filters__submit'>НАЙТИ</button>
      </form>
    </div>
  </div>
}

export default Filters;
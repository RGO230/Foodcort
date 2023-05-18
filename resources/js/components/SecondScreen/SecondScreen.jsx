import './SecondScreen.css';
import Map from '../Map/Map'
import Result from '../Result/Result';
import { useEffect, useState } from 'react';
import React from 'react';

const SecondScreen = () => {
  const [result, setResult] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(false);
  const [mapCenter, setMapCenter] = useState([51.665944, 39.191717]);
  const [params, setParams] = useState({
    delivery: false,
    eatPlace: false,
    priceFrom: 0,
    priceTo: 0,
    district: '',
    sortBy: '',
  })

  useEffect(() => {
    fetch('http://diplom.online.swtest.ru/api/filtration')
      .then(res => res.json())
      .then(res => setResult(res))
      .catch(e => setError(true))
      .finally(() => setLoading(false))
  }, [])

  return <>
    <div className='second-screen'>
      <div className='second-screen__content'>
        <Result items={result} 
        loading={loading} 
        sortBy={params.sortBy}/>
        <Map center={mapCenter} />
      </div>
    </div>
  </>
}

export default SecondScreen;
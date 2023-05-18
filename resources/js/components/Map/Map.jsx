import { useRef, useState } from 'react';
import './Map.css'
import { YMaps, Map, Placemark, Clusterer } from "react-yandex-maps";
import Placeholder from '../Placeholder/Placeholder';
import React from 'react';
const SearchMap = ({center}) => {
  const [zoom, setZoom] = useState(10);
  const [loading, setLoading] = useState(true);
  const map = useRef(null)
  const placeMarkCollection = [];

  return <div className='map__container'>
    {loading ? <Placeholder /> : null}
    <YMaps>
      <Map defaultState={{ center: center, zoom: zoom }} width='100%' height='100%'
        modules={['geoObject.addon.balloon', 'geoObject.addon.hint', 'clusterer.addon.balloon']}
        instanceRef={map}
        onLoad={() => setLoading(false)}
      >
      </Map>
    </YMaps>
  </div>
}

export default SearchMap;
import { useState, useEffect } from 'react'
import { createPortal } from 'react-dom';
import React from 'react';
const Portal = ({children}) => {
  const [container] = useState(() => {
    return document.createElement('div');
  });

  useEffect(() => {
    document.body.appendChild(container)
    return () => {
      document.body.removeChild(container)
    }
  }, [])

  return createPortal(children, container)
}

export default Portal;
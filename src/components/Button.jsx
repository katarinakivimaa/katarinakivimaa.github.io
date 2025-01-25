import React from 'react'

const Button = ({ styles }) => {
  return (
    <button 
      type='button' 
      className={`py-4 px-6 bg-[radial-gradient(circle_at_top_left,_#ff77b5,_#ff007f)] font-poppins font-medium text-[18px] text-white outline-none ${styles} rounded-[10px]`}
    >
      Alusta praegu!
    </button>
  )
}

export default Button

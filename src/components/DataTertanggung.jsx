"use client";
import React from 'react'

export const DataTertanggung = () => {
  return (
    <div className='bg-back p-3'>
     <p className='font-semibold my-2 text-md underline underline-offset-8'> 1.1 Data Tertanggung </p>
        <form action="" method='post' className='flex flex-col'>
        <label htmlFor="" className='text-sm mt-2'> Nama Lengkap </label>
        <input type="text" placeholder='Nama Lengkap' className='input-xs'/>
        
        <label htmlFor="" className='text-sm mt-2'> Nomor Hp </label>
        <input type="text" placeholder='Nomor Hp' className='input-xs'/>
        
        <label htmlFor="" className='text-sm mt-2'> Alamat Email </label>
        <input type="email" placeholder='Alamat Email' className='input-xs'/>
        
        <label htmlFor="" className='text-sm mt-2'> Nomor Ktp/Passport </label>
        <input type="text" placeholder='No. Ktp/Passport' className='input-xs'/>
        
        <label htmlFor="" className='text-sm mt-10 mb-5 font-semibold underline underline-offset-8'> Upload Ktp </label>
        <input
          type="file"
          placeholder="Upload Ktp"
          className="file-input file-input-ghost w-full max-w-xs file-input-xs"
          style={{
            backgroundColor: "white",
            color: "black",
            border: "none",
            boxShadow: "0px 4px 6px rgba(0, 0, 0, 0.5)",
          }}
        />
        </form>
    </div>

  )
}

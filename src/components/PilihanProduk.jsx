"use client";
import React from 'react'

export const PilihanProduk = () => {
  return (
    <div className='bg-back p-3'>
        <p className='font-semibold my-2 underline underline-offset-8'> 1.2 Pilihan Produk</p>
        <form action="" method='post' className='flex flex-col gap-2'>
            <label htmlFor="" className='text-sm mt-2'> Pilih Produk </label>
            <div className='flex items-center flex-row gap-2'>   
            <select className="select select-sm select-warning w-full max-w-xs">
                <option disabled selected> Pilih Produk </option>
                <option value= 'Plan A'> Plan A </option>
                <option value= 'Plan B'> Plan B </option>
                <option value= 'Plan C'> Plan C </option>
                <option> Up Comming.</option>
            </select>
            </div>
            <h1 className='text-sm font-semibold my-2 underline underline-offset-8'> Tanggal Periode Polis </h1>
            <div className='flex flex-col'>
            <label htmlFor="" className='text-sm'>Start Date</label>
            <input type="date" className='input-xs'/> 
            <label htmlFor="" className='text-sm'>End-Date</label>
            <input type="date" className='input-xs'/>
            </div>
            <label htmlFor="" className='text-sm'> Tanggal Pengesahan</label>
            <input type="date" className='input-xs'/> 

            <label htmlFor="" className='text-sm'> Pembayaran (auto logic) </label>
            <input type="text" className='input-xs'/>
        </form>
    </div>
  )
}

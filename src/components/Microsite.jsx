"use client"
import React from 'react'
import { DataTertanggung } from './DataTertanggung'
import { PilihanProduk } from './PilihanProduk'
import { Lihat } from './Lihat';

export const Microsite = () => {
  return (
    <div>
        <div className='bg-back pb-5'>
        <h1 className='bg-main p-4 mb-3 font-bold text-sm text-backsec underline underline-offset-8'> Microsite <i> (System digital) </i></h1>
        <div className='flex justify-center gap-12 mr-12 mb-12'>
        <DataTertanggung/>
        <PilihanProduk/>
        <Lihat />
        </div>
        </div>
    </div>
  )
}

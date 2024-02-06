"use client";

import React from 'react';
import toast, { Toaster } from 'react-hot-toast';

export const Lihat = () => {

        const ToastNotication = () => {
            toast.success('Successfully Add New Data!');
        }

  return (
    <div className='bg-back p-3'>
    <p className='font-semibold my-2 text-md underline underline-offset-8'> 1.3 Lihat Detail Lainnya </p>

    <div className="collapse bg-main collapse-arrow w-full rounded-sm ">
    <input type="checkbox" /> 
    <div className="collapse-title text-md font-semibold">
      <p className='text-sm'> Informasi Polis & Tabel Manfaat </p>
    </div>
    <div className="collapse-content bg-backsec"> 
      <p> (Akan diisi informasi polis dan tabel manfaat, soon) </p>
    </div>
  </div>

  <div className="collapse bg-main collapse-arrow w-full rounded-sm my-3">
    <input type="checkbox" /> 
    <div className="collapse-title text-md font-semibold">
      <p className='text-sm'> Disclaimer </p>
    </div>
    <div className="collapse-content bg-backsec"> 
      <p> (Akan diisi informasi disclaimer, soon) </p>
    </div>
  </div>

    <div>
        <p className='font-semibold my-2 text-md mt-7 underline underline-offset-8'> 1.4 Ajukan Klaim </p>
        <button onClick={ToastNotication} className='btn bg-backsec btn-md mt-5 text-black hover:bg-main hover:text-backsec w-full'> Ajukan Klaim </button>
    </div>

    <Toaster/>
  </div>
  );
};

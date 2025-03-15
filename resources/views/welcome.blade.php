<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-geekblue-black h-screen w-screen p-10 md:p-20 flex justify-center items-center">
    <div class="w-full p-[1px] h-full bg-[linear-gradient(to_bottom_right,#6872FF,#A268FF,#DC68FF,#190DC0,#6CB3FF)] rounded-4xl max-w-4xl max-h-12/12 xl:max-h-11/12">
        <div class="bg-geekblue-black overflow-hidden relative w-full h-full rounded-[31px]">
            <div class="absolute w-full h-full p-5 lg:p-10 space-y-5 flex flex-col md:grid md:grid-cols-9 gap-4">
                <div class="col-span-5 space-y-2">
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Join Over 2568+ <br> <span class="bg-gradient-to-r from-geekblue-700 to-pink-300 bg-clip-text font-extrabold text-transparent">Expert Designers</span></h1>
                    <p class="text-neutrail-400 text-base/5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus provident ab, saepe adipisci facere sed!</p>
                    
                </div>

                <div class="w-full md:col-span-4 p-[1px] h-full bg-gradient-to-br from-grad-2-1/50 to-grad-2-2/50 rounded-2xl max-w-4xl ">
                    <div class="bg-geekblue-black overflow-hidden relative w-full h-full rounded-[15px]">
                        <div class="bg-white/5 w-full h-full absolute"></div>
                        <img src="{{ asset('style-assets/radianblur.webp') }}" alt="" class="absolute -bottom-0 -left-0 min-w-[600px]">
                        <img src="{{ asset('style-assets/radianblur 2.webp') }}" alt="" class="absolute top-0 right-0 max-w-[200px] min-w-[100px]">
                        <div class="absolute w-full h-full p-5 lg:p-10 flex flex-col justify-between gap-3 overflow-y-auto">
                            <div class="flex justify-center">
                                <img src="{{ asset('logo/Asset 2.svg') }}" alt="Logo" class="max-h-12 md:max-h-15">
                            </div>
                            <form action="" class="space-y-3">
                                <h1 class="text-2xl lg:text-3xl mb-5 text-white font-bold text-center">Register your account</h1>
                                <div class="flex flex-col gap-1">
                                    <label class="text-neutrail-300 text-base">Name</label>
                                    <input type="text" class="w-full bg-geekblue-700/25 text-base text-neutrail-300 px-3 py-2 rounded-xl outline-1 focus:outline-2 outline-neutrail-500 focus:outline-geekblue-700" placeholder="Please write data">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="text-neutrail-300 text-base">Name</label>
                                    <input type="text" class="w-full bg-geekblue-700/25 text-base text-neutrail-300 px-3 py-2 rounded-xl outline-1 focus:outline-2 outline-neutrail-500 focus:outline-geekblue-700" placeholder="Please write data">
                                </div>
                                <button type="submit" class="text-white cursor-pointer bg-geekblue-700 hover:bg-geekblue-600 duration-200 font-bold text-lg w-full mt-2 py-2 rounded-xl">Register</button>
                            </form>
                            <div>
                                <p class="text-neutrail-300 text-center">Already Have An Account - <a href="" class="text-geekblue-500">Sign In Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
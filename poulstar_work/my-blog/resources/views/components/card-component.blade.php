<div>

 <br>
   <section  class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
      <div  class="container">
         <div  class="flex flex-wrap -mx-4">
            @foreach ($products as $product)
            <div  class="w-full md:w-1/2 xl:w-1/3 px-4">
               <div style="background: linear-gradient(to bottom right, #2573a1, #5affad);; width:50%; height:100%;" class="bg-white rounded-lg overflow-hidden mb-10">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/cards/card-01/image-01.jpg"
                     alt="image"
                     class="w-full"
                     />
                  <div  class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                     <h3                       style="color:white">
                        {{ $product->name }}
                        </a>
                     </h3>
                     <br>
                     <h5 style="color:white">
                        {{ $product->price }}
                     </h5>
                     
                     <br>
                     <a href="{{ route('readmore',$product) }}"><button  class="button-62" role="button">submit</button></a>
                  </div>
               </div>
            </div>
            @endforeach
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </section>
 
       







</div>
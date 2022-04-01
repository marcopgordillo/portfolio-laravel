<span class="absolute -right-10 top-[90px] z-[-1]">
   <svg
       width="34"
       height="134"
       viewBox="0 0 34 134"
       fill="none"
       xmlns="http://www.w3.org/2000/svg"
   >
       @for($i = 0; $i < 10; ++$i) {{-- y --}}
           @for($j = 0; $j < 3; ++$j) {{-- x --}}
               <circle
                   cx="{{ 2.66536 + 14.66697 * $j }}"
                   cy="{{ 1.66665 + 14.48148 * $i }}"
                   r="1.66667"
                   transform="rotate(180 {{ 2.666536 + 14.66697 * $j }} {{ 1.66665 + 14.48148 * $i }})"
                   fill="#13c296"
               />
           @endfor
       @endfor
   </svg>
</span>

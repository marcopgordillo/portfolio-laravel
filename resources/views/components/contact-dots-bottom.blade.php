<span class="absolute -left-7 -bottom-7 z-[-1]">
   <svg
       width="107"
       height="134"
       viewBox="0 0 107 134"
       fill="none"
       xmlns="http://www.w3.org/2000/svg"
   >
       @for($i = 0; $i < 10; ++$i)
           @for($j = 0; $j < 8; ++$j)
               <circle
                   cx="{{ 2.66536 + 14.61892 * $j }}"
                   cy="{{ 1.66665 + 14.48148 * $i }}"
                   r="1.66667"
                   transform="rotate(180 {{ 2.666536 + 14.61892 * $j }} {{ 1.66665 + 14.48148 * $i }})"
                   fill="#13c296"
               />
           @endfor
      @endfor
   </svg>
</span>

<span class="absolute -right-7 -bottom-7 z-[-1]">
    <svg
        width="134"
        height="106"
        viewBox="0 0 134 106"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
            @for($i = 0; $i < 8; ++$i)
                @for($j = 0; $j < 10; ++$j)
                    <circle
                        cx="{{ 1.66667 + 14.48148 * $j }}"
                        cy="{{ 1.66683 + 14.61902 * $i }}"
                        r="1.66667"
                        transform="rotate(-90 {{ 1.66667 + 14.48148 * $j }} {{ 1.66683 + 14.61902 * $i }})"
                        fill="#3056D3"
                    />
                @endfor
            @endfor
    </svg>
</span>

<?php

declare (strict_types=1);

/**
 * Description of Response
 *
 * @author kjellh
 */
class Response {

    public function __construct(private string|array|stdClass $content, private int $status) {
        
    }

    public function getContent(): string|array|stdClass {
        return $this->content;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setContent(string|array|stdClass $content): void {
        $this->content = $content;
    }

    public function setStatus(int $status): void {
        $this->status = $status;
    }

}

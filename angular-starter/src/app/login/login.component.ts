import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';

import { BackendService } from '../backend.service'

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  loginForm;

  constructor(
    private formBuilder: FormBuilder,
    private backend: BackendService,
  ) {
    this.loginForm = this.formBuilder.group({
      username: '',
      password: ''
    });
  }

  ngOnInit() {
  }

  onSubmit(customData){
      // this.http.post('/web');
  }
}

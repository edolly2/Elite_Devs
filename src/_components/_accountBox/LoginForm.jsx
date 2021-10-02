import React, { useContext } from "react";
import {
  BoldLink,
  BoxContainer,
  FormContainer,
  Input,
  MutedLink,
  SubmitButton,
  InputLabel,
} from "./Common";
import { Marginer } from "../_marginer";
import { AccountContext } from "./AccountContext";

export function LoginForm(props) {
  const { switchToSignup } = useContext(AccountContext);
  return (
    <BoxContainer>
      <FormContainer>
        <InputLabel>Email</InputLabel>
        <Input type="email" placeholder="example@email.com" />
        <InputLabel>Password</InputLabel>
        <Input type="password" placeholder="********" />
      </FormContainer>
      <Marginer direction="vertical" margin={10} />
      <MutedLink href="#">Forgot your password?</MutedLink>
      <Marginer direction="vertical" margin={10} />
      <SubmitButton type="submit">Login</SubmitButton>
      <Marginer direction="vertical" margin={10} />
      <MutedLink href="#">
        Dont't have an account?
        <BoldLink href="#" onClick={switchToSignup}>
          Sign-up
        </BoldLink>
      </MutedLink>
    </BoxContainer>
  );
}

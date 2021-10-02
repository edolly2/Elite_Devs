import styled from "styled-components";

export const BoxContainer = styled.div`
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: -20px;
`;

export const FormContainer = styled.form`
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0px 0px 10px rgba(15, 15, 15, 0.1);
  padding: 16px 16px 24px 16px;
`;

export const MutedLink = styled.a`
  font-size: 11px;
  text-decoration: underline !important;
  font-weight: 500;
  text-decoration: none;
  margin-left: 10px;
  background: rgb(147, 0, 80);
  background: linear-gradient(
    90deg,
    rgba(147, 0, 80, 1) -30%,
    rgba(30, 0, 101, 1) 100%
  );
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;

  &:hover {
    background: rgb(147, 0, 80);
    background: linear-gradient(
      90deg,
      rgba(30, 0, 101, 1) -30%,
      rgba(147, 0, 80, 1) 100%
    );
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
  }
`;

export const BoldLink = styled.a`
  font-size: 11px;
  color: rgb(147, 0, 80);
  font-weight: 500;
  text-decoration: none;
  margin: 0 4px;
`;

export const Input = styled.input`
  width: 100%;
  height: 42px;
  outline: none;
  border: 1px solid rgba(200, 200, 200, 0.3);
  padding: 0px 10px;
  border: 1.4px solid transparent;
  transition: all 200ms ease-in-out;
  font-size: 14px;
  border-radius: 10px;

  &::placeholder {
    color: rgba(200, 200, 200, 1);
  }

  &:not(:last-of-type) {
    border: 1.5px solid rgba(200, 200, 200, 0.4);
    margin-bottom: 10px;
  }

  &:focus {
    outline: none;
    border: 2px solid rgb(147, 0, 80);
  }
`;

export const InputLabel = styled.label`
  font-size: 14px;
  font-weight: 500;
  padding: 0 10px;
  color: rgb(16, 22, 99);
`;

export const SubmitButton = styled.button`
  width: 100%;
  padding: 11px 30%;
  color: #fff;
  font-size: 15px;
  font-weight: 600;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all, 0.3s ease-in-out;
  background: rgb(147, 0, 80);
  background: linear-gradient(
    90deg,
    rgba(147, 0, 80, 1) 20%,
    rgba(30, 0, 101, 1) 100%
  );

  &::before,
  &::after {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    border-radius: 10px;
    z-index: -1;
  }

  &::after {
    opacity: 0;
    background-image: linear-gradient(
      to right,
      rgba(30, 0, 101, 1),
      rgba(147, 0, 80, 1) 100%
    );
    transition: opacity.3s ease-in-out;
  }

  &:hover {
    filter: brightness(1.03);
  }
  &:hover::after {
    opacity: 1;
  }
`;
